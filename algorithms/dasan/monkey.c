#include <stdio.h>
#include <stdlib.h>
typedef struct Node {
    int data;
    struct Node *next;
} Node;

int main() {
   struct Node *head, *s, *q, *t;
   int n, m, count=0, i;
   printf("input the number m:");
   scanf("%d",&m);
   printf(" input the number n:");
   scanf("%d",&n);
   for(i=0; i<m; i++) {
      s=(struct Node *)malloc(sizeof(struct Node));
      s->data=i+1;
      s->next=NULL;
      if(i==0) {
         head=s;
         q=head;
      }
      else {
         q->next=s;
         q=q->next;
      }
   }
   q->next=head;
   printf("before:");
   q=head;
   while(q->next!=head) {
      printf("%d ",q->data);
      q=q->next;
   }
   printf("%d ",q->data);
   q=head;
   printf(" ");
   do {
      count++;
      if(count==n-1) {
         t=q->next;
         q->next=t->next;
         count=0;
         printf("%d ", t->data);
         free(t);
      }
      q=q->next;
   }
   while(q->next!=q);
   printf("the king is: %d ",q->data);
}

