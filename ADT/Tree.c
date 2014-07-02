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
char GetHead(Queue *queue);
void InitialQueue(BiTree *T, Queue *queue);
void EnQueue(Queue *queue, BiTreeNode *node);

//定义二叉树接口
void InitBiTree(BiTree *T);
void DestroyBiTree(BiTreeNode *root);
void CreateBiTree(BiTree *T, int some);
void CleanBiTree(BiTree *T);
int BiTreeDepth(BiTree *T);
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
    //定义一个根，然后动态分配一个内存单元
    BiTree *T = (BiTree *)malloc(sizeof(BiTree));
    /***/
}

/**
 * 初始化二叉树
 * @param T [树框架的地址]
 */
void InitBiTree(BiTree *T) {
    T->root = NULL;
}

/**
 * 删除二叉树
 * @param root [树的根地址]
 */
void DestroyBiTree(BiTreeNode *root) {
    while (root) {
        DestroyBiTree(root->left);
        DestroyBiTree(root->right);
        free(root);
    }
}

/**
 * [LeftSubling description]
 * @param  T    [description]
 * @param  node [description]
 * @return      [description]
 */
BiTreeNode *LeftSubling(BiTree *T, BiTreeNode *node) {
    BiTreeNode *parent = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    BiTreeNode *right = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    if (T == NULL || node == NULL)
        return NULL;

    parent = node->parent;

    if (LeftChild(parent) == node) {
        right = RightChild(parent);
        return right;
    }

    return NULL;
}

/**
 * [RightSubling description]
 * @param  T    [description]
 * @param  node [description]
 * @return      [description]
 */
BiTreeNode *RightSubling(BiTree *T, BiTreeNode *node) {
    BiTreeNode *parent = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    BiTreeNode *left = (BiTreeNode *)malloc(sizeof(BiTreeNode));

    if (T == NULL || node == NULL)
        return NULL;

    parent = node->parent;

    if (RightChild(parent) == node) {
        left = LeftChild(parent);
        return left;
    }
    return NULL;
}

/**
 * [InsertChild description]
 * @param T           [description]
 * @param node        [description]
 * @param leftOrRight [description]
 * @param c           [description]
 */
void InsertChild(BiTree *T, BiTreeNode *node, int leftOrRight, BiTreeNode *c) {
    BiTreeNode *child = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    if (leftOrRight == 0) {
        child = node->left;
        node->left = c;
    }
    else {
        child = node->right;
        node->right = c;
    }
    c->right = child;
}

/**
 * [DeleteChild description]
 * @param T           [description]
 * @param p           [description]
 * @param leftOrRight [description]
 */
void DeleteChild(BiTree *T, BiTreeNode *p, int leftOrRight) {
    if (T == NULL)
        return;

    if (leftOrRight == 0) {
    }

    if (p->left == NULL && p->right == NULL)
        free(p);

    return;
}

/**
 * [PreOrderTraverse description]
 * @param root [description]
 */
void PreOrderTraverse(BiTreeNode *root) {
    if (root) {
        printf("%c", root->data);
        PreOrderTraverse(root->left);
        PreOrderTraverse(root->right);
    }
    return;
}

/**
 * [InOrderTraverse description]
 * @param root [description]
 */
void InOrderTraverse(BiTreeNode *root) {
    if (root) {
        PreOrderTraverse(root->left);
        printf("%c", root->data);
        PreOrderTraverse(root->right);
    }
}

/**
 * [PostOrderTraverse description]
 * @param root [description]
 */
void PostOrderTraverse(BiTreeNode *root) {
    if (root) {
        PreOrderTraverse(root->left);
        PreOrderTraverse(root->right);
        printf("%c", root->data);
    }
}

/**
 * [LevelOrderTraverse description]
 * @param queue [description]
 */
void LevelOrderTraverse(Queue *queue) {
    while (queue) {
        printf("%c", Visit(queue->head->address));
        EnQueue(queue, queue->head->address->left);
        EnQueue(queue, queue->head->address->right);
    }
}

/**
 * [InitialQueue description]
 * @param T     [description]
 * @param queue [description]
 */
void InitialQueue(BiTree *T, Queue *queue) {
    QueueElem *newQueueElem = (QueueElem *)malloc(sizeof(QueueElem));
    if (T) {
        newQueueElem->address = T->root;
        queue->head = queue->tail = newQueueElem;
    }
}

/**
 * [QueueEmpty description]
 * @param  queue [description]
 * @return       [description]
 */
int QueueEmpty(Queue *queue) {
    if (queue->head)
        return -1;

    return 1;
}

/**
 * [GetHead description]
 * @param  queue [description]
 * @return       [description]
 */
char GetHead(Queue *queue) {
    QueueElem *order = (QueueElem *)malloc(sizeof(QueueElem));
    BiTreeNode *node = (BiTreeNode *)malloc(sizeof(BiTreeNode));
    char data;
    if (queue->head) {
        node = queue->head->address;
        data = node->data;
        order = queue->head;
        queue->head = queue->head->next;
        free(order);
        return data;
    }
    return -1;;
}

/**
 * [EnQueue description]
 * @param queue [description]
 * @param node  [description]
 */
void EnQueue(Queue *queue, BiTreeNode *node) {
    QueueElem *orderTail = (QueueElem *)malloc(sizeof(QueueElem));
    QueueElem *newQueueElem = (QueueElem *)malloc(sizeof(QueueElem));
    if (newQueueElem->address = node) {
        orderTail = queue->tail;
        orderTail->next = newQueueElem;
        queue->tail = newQueueElem;
    }

    if (queue->head == NULL)
        queue->head = newQueueElem;
}
