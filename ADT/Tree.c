/**
 *  一个关于二叉树的ADT
 *
 * author:余晓盛
 *
 */
#include <stdio.h>
#include <stdlib.h>

//定义了节点的结构
typedef struct BiTreeNode_ {
    int data;
    struct BiTreeNode_ *left;
    struct BiTreeNode_ *right;
    struct BiTreeNode_ *parent;
} BiTreeNode;

//定义了树的基本框架
typedef struct BiTree_ {
    struct BiTreeNode_ *root;
} BiTree;

// 定义队列进行层次遍历
typedef struct QueueElem_ {
    BiTreeNode *address;
    struct QueueElem_ *next;
} QueueElem;

//定义了队列的结构->为了层级遍历
typedef struct Queue_ {
    QueueElem *head;
    QueueElem *tail;
} Queue;

//定义队列接口
int QueueEmpty(Queue *queue);
void GetHead(Queue *queue);
void InitialQueue(BiTree *T, Queue *queue);
void EnQueue(Queue *queue, BiTreeNode *node);

//定义二叉树接口
void InitBiTree(BiTree *T);
void DestroyBiTree(BiTreeNode *root);
void CreateBiTree(BiTree *T, int some);
void CleanBiTree(BiTree *T);
int BiTreeDepth(BiTreeNode *root);
void InsertChild(BiTree *T, BiTreeNode *node, int leftOrRight, BiTreeNode *c);
BiTreeNode *LeftSubling(BiTree *T, BiTreeNode *node);
BiTreeNode *RightSubling(BiTree *T, BiTreeNode *node);
void DeleteChild(BiTree *T, BiTreeNode *p, int leftOrRight);
void PreOrderTraverse(BiTreeNode *root);
void InOrderTraverse(BiTreeNode *root);
void PostOrderTraverse(BiTreeNode *root);
void LevelOrderTraverse(Queue *queue);

//将一些简单操作直接在宏定义里面实现
#define Root(T) ((T)->root)
#define Visit(node) ((node)->data)
#define BiTreeEmpty(T) ((T->root == NULL) ? 1 : 0)
#define Parent(T, node) ((node == NULL) ? NULL : node->parent)
#define RightChild(node) ((node->right) == NULL ? NULL : node->right)
#define LeftChild(node) ((node->left) == NULL ? NULL : node->left)


int main() {
    /**
     *  建立一个含三个元素的二叉树进行测试
     */
    BiTreeNode *leftNode = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    BiTreeNode *rightNode = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    BiTreeNode *leftLeftNode = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    int newData;
    Queue *queue = (Queue *)malloc(sizeof(Queue));
    //定义一个根，然后动态分配一个内存单元
    BiTree *T = (BiTree *)malloc(sizeof(BiTree));

    // 测试 Initbitree()
    InitBiTree(T);
    printf("T 树是否为空 ：");
    if (BiTreeEmpty(T))
        printf("为空\n");
    else {
        printf("不为空\n");
    }

    // 生成根的数据 测试方法 CreateBiTree()
    printf("请输入根的数据");
    scanf("%d", &newData);
    CreateBiTree(T, newData);
    printf("T 树是否为空 ： ");
    if (BiTreeEmpty(T))
        printf("为空\n");
    else {
        printf("不为空\n");
    }

    // 生成根的左孩子
    printf("请输入根的左孩子的数据");
    scanf("%d", &newData);
    T->root->left = leftNode;
    leftNode->data = newData;
    leftNode->parent = T->root;
    // 生成根的左孩子的左孩子
    printf("添加根的左孩子的左孩子用于测试");
    scanf("%d", &newData);
    T->root->left->left = leftLeftNode;
    leftLeftNode->data = newData;
    leftLeftNode->parent = T->root->left;

    // 生成根的右孩子
    printf("请输入根的右子树");
    scanf("%d", &newData);
    T->root->right = rightNode;
    rightNode->data = newData;
    rightNode->parent = T->root;

    /**
     * 打印出根的数据
     * 测试的方法有 Root() 和 Value()
     */
    printf("根的数据是 ：%d\n", Visit(Root(T)));

    /**
     * 测试BiTreeDepth() 这个方法
     */
    printf("树的深度是 %d \n", BiTreeDepth(T->root));

    /**
     *  测试Leftchild() 和 Rightchild()
     */
    printf("根的左孩子的数据是： %d \n", Visit(LeftChild(Root(T))));
    printf("根的右孩子的数据是： %d \n", Visit(RightChild(Root(T))));

    // 测试 Parent()
    printf("根的左孩子的父亲节点数据 : %d ", Visit(Parent(T, LeftChild(Root(T)))));

    // 测试Leftsubling()
    printf("测试LeftSubling的方法，输出是：%d \n", Visit(LeftSubling(T, T->root->right)));

    // 测试先序遍历 中序遍历 和 后序遍历
    printf("先序测试结果：");
    PreOrderTraverse(T->root);
    printf("\n");
    printf("中序测试结果");
    InOrderTraverse(T->root);
    printf("\n");
    printf("后序测试结果");
    PostOrderTraverse(T->root);
    printf("\n");

    /**
     * 测试Deletechild()和Destroybitree() 这两个方法
     * 在Deletechild() 中调用了Destroybitree() 这个方法
     */
    printf("删除根的左子树，然后通过先序遍历遍历树\n");
    DeleteChild(T, T->root, 0);
    T->root->left = NULL;
    PreOrderTraverse(T->root);

    return 0;
}

/**
 * 初始化二叉树, 并且加入根的数据
 * @param T [树框架的地址]
 */
void InitBiTree(BiTree *T) {
    T->root = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    T->root = NULL;
}

void CreateBiTree(BiTree *T, int newData) {
    BiTreeNode *newNode = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    T->root = newNode;
    newNode->data = newData;
}

int BiTreeDepth(BiTreeNode *root) {
    if (root == NULL)
        return 0;

    int leftDepth = BiTreeDepth(root->left);
    int rightDepth = BiTreeDepth(root->right);

    return (leftDepth > rightDepth) ? (leftDepth + 1) : (rightDepth + 1);
}

/**
 * 删除二叉树
 * @param root [树的根地址]
 */
void DestroyBiTree(BiTreeNode *root) {
    if (root) {
        DestroyBiTree(root->left);
        DestroyBiTree(root->right);
        free(root);
    }
}

/**
 * @param  T    二叉树
 * @param  node 要操作的节点
 * @return      返回node的右兄弟
 */
BiTreeNode *RightSubling(BiTree *T, BiTreeNode *node) {
    BiTreeNode *parent = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    BiTreeNode *right = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    if (T == NULL || node == NULL || node == T->root)
        return NULL;

    parent = node->parent;

    if (LeftChild(parent) == node) {
        right = RightChild(parent);
        return right;
    }

    return NULL;
}

/**
 * @param  T    二叉树
 * @param  node 要操作的节点
 * @return      返回node的左兄弟节点
 */
BiTreeNode *LeftSubling(BiTree *T, BiTreeNode *node) {
    BiTreeNode *parent = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    BiTreeNode *left = (BiTreeNode *)malloc(sizeof(BiTreeNode));

    if (T == NULL || node == NULL || node == T->root)
        return NULL;

    parent = node->parent;

    if (RightChild(parent) == node) {
        left = LeftChild(parent);
        return left;
    }
    return NULL;
}

/**
 * 将二叉树插入指定的节点中
 * @param T           二叉树
 * @param node        要操作的节点
 * @param leftOrRight 判断是节点的左子树还是右子树
 * @param c           要进行插入的二叉树
 */
/*void InsertChild(BiTree *T, BiTreeNode *node, int leftOrRight, int newData, BiTreeNode *c) {
    if (T == NULL) exit(1);

    BiTreeNode *child = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    if (leftOrRight == 0) {
        child = node->left;
        node->left = c;
    }
    else {
        child = node->right;
        node->right = c;
    }

    child->data = newData;
    c->right = child;
}*/

/**
 * 删除二叉树指定节点
 * @param T           二叉树
 * @param p           指定节点
 * @param leftOrRight 判断是左孩子还是右孩子
 */
void DeleteChild(BiTree *T, BiTreeNode *p, int leftOrRight) {
    if (!T) exit(1);

    if (leftOrRight == 0) {
        DestroyBiTree(p->left);
        p->left = NULL;
    }
    else {
        DestroyBiTree(p->right);
        p->right = NULL;
    }
}

/**
 * 先序遍历
 */
void PreOrderTraverse(BiTreeNode *root) {
    if (root) {
        printf("%d ", root->data);
        PreOrderTraverse(root->left);
        PreOrderTraverse(root->right);
    }
}

/**
 * 中序遍历
 */
void InOrderTraverse(BiTreeNode *root) {
    if (root) {
        PreOrderTraverse(root->left);
        printf("%d ", root->data);
        PreOrderTraverse(root->right);
    }
}

/**
 * 后序遍历
 */
void PostOrderTraverse(BiTreeNode *root) {
    if (root) {
        PreOrderTraverse(root->left);
        PreOrderTraverse(root->right);
        printf("%d ", root->data);
    }
}

/**
 * 层级遍历
 */
void LevelOrderTraverse(Queue *queue) {
    printf("%d\n", queue->head->address->data);
    if (queue->head->address->left)
    EnQueue(queue, queue->head->address->left);
    if (queue->head->address->right)
    EnQueue(queue, queue->head->address->right);
    GetHead(queue);
    printf("%d\n", queue->head->next->address->data);
    /*while (queue->head != NULL) {
        printf("%d ", queue->head->address->data);
        if (queue->head->address->left)
            EnQueue(queue, queue->head->address->left);
        if (queue->head->address->right)
            EnQueue(queue, queue->head->address->right);
        GetHead(queue);
    }*/

}

/**
 * 初始化队列
 */
void InitialQueue(BiTree *T, Queue *queue) {
    QueueElem *newQueueElem = (QueueElem *)malloc(sizeof(QueueElem));
    if (T) {
        newQueueElem->address = T->root;
        newQueueElem->next = (QueueElem *)malloc(sizeof(QueueElem));
        newQueueElem->next = NULL;
        queue->head = queue->tail = newQueueElem;
    }
}

/**
 * 检查队列是否为空
 */
int QueueEmpty(Queue *queue) {
    if (queue->head != NULL)
        return -1;

    return 1;
}

/**
 * 出队列， 不打印
 */
void GetHead(Queue *queue) {
    QueueElem *order = (QueueElem *)malloc(sizeof(QueueElem));
    if (queue->head != NULL) {
        order = queue->head;
        if (queue->head == queue->tail) {
            queue->head = queue->tail = NULL;
        }
        else {
            queue->head = queue->head->next;
        }
        free(order);
    }
}

/**
 * 入队列
 */
void EnQueue(Queue *queue, BiTreeNode *node) {
    QueueElem *newQueueElem = (QueueElem *)malloc(sizeof(QueueElem));
    newQueueElem->next = (QueueElem *)malloc(sizeof(QueueElem));
    newQueueElem->next = NULL;
    queue->tail->next = (QueueElem *)malloc(sizeof(QueueElem));
    queue->tail->next = newQueueElem;
    queue->tail = newQueueElem;

    if (queue->head == NULL)
        queue->head =queue->tail = newQueueElem;
}
