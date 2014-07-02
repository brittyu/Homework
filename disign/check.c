#include <stdio.h>
#include <stdlib.h>
int main() {
   /* struct check {
        int data;
        struct check *head;
    };

    struct check *hello;
    hello = (struct check *)malloc(sizeof(struct check));
    hello->data = 1;*/
    int *i = (int *)malloc(sizeof(int));
    if (i)
        printf("%d", 1);
    else
        printf("%d", 2);
    return 0;
}
