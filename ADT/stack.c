#include <stdio.h>

#ifndef STACK_H
#define STACK_H

#include <stdlib.h>

//定义栈的数据结构
typedef struct stackElem_ {
    void *data;
    struct stackElem_ *next;
} stackElem;

typedef struct stack_ {
    int size;
    stackElem *top;
    stackElem *tail;
} stack;

//定义栈的接口
void stackInit(stack *stack);
void stackDestory(stack *stack);
int stackEmpty(stack *stack);
int stackPush(stack *stack, int *data);
int stackPop(stack *stack, void **data);

#define stackPeek(stack) ((stack)->head == NULL ? NULL : (stack)->head->data)
#define stackSize(stack) ((stack)->size)

#endif

int main() {
	/*some code to check function*/
}

/**
 * Begin stack
 * @param  stack
 * @return
 */
int stackInit(stack *stack) {
    /*initialize the stack*/
    stack->size = 0;
    stack->top = NULL;
    stack->tail = NULL;
}

/**
 * To pop data from stack
 * fix a QA -> void **data;
 * @param  stack
 * @param  data
 * @return
 */
int stackPop(stack *stack, void **data) {
    stackEmpty *orderStack;
    if (stackEmpty(stack))
        return 0;

    *data = stack->top->data;

    orderStack = stack->top;
    stack->top = stack->top->next;

    free(orderStack);
    stack->size--;
    return 1;
}

/**
 * Push new data into stack
 * @param stack
 * @param data
 */
void stackPush(stack *stack, void *data) {
    stack *newStackElemt;
    newStackElemt->data = (void *)data;

    if (stackSize(stack) == 0) {
    stack->top = newStackElemt;
    stack->tail = newStackElemt;
    stack->size++;
    }
    else {
        newStackElemt->next =  stack->top;
        stack->top = newStackElemt;
        stack->size++;
    }
}
/**
 * To destory the stack
 * @param  stack
 * @return
 */
int stackDestory(stack *stack) {
	stack *p;
	if (stackEmpty(stack))
		return 1;

	while (stack->top) {
		p = stack->top;
		free(stack->top);
		stack->top = p;
	}
	return 1;
}

/**
 * To check the stack empty
 * @param  stack
 * @return
 */
int stackEmpty(stack *stack) {
	if (stack->top == NULL)
		return 1;
	return 0;
}
