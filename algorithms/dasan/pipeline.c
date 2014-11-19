#include <stdio.h>
#include <stdlib.h>
void sort(int a[], int numbersize);
int main() {
    int number;
    int a[100];
    int i=0;

    printf("坐标数:");
    scanf("%d", &number);
    printf("坐标的纵坐标");
    for(; i < number; i++) {
        scanf("%d", a+i);
    }
    a[i]='\0';
    sort(a, i);

    if (i%2==0) {
        printf("管道ｙ坐标应为：%d", i/2);
    }
    else {
        printf("管道ｙ坐标应为：%d", (i+1)/2);
    }
    return 0;
}

void sort(int a[], int numbersize) {
    int i=0,j=numbersize-1;
    int val=a[0];
    if(numbersize>1) {
        while(i<j) {
            for(;j>i;j--) {
                if(a[j]<val) {
                    a[i++]=a[j];
                    break;
                }
            }
            for(;i<j;i++) {
                if(a[i]>val) {
                    a[j--]=a[i];
                    break;
                }
            }
        }
        a[i]=val;
        sort(a,i);
        sort(a+i+1,numbersize-i-1);
    }
}
