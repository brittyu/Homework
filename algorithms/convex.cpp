#include <stdio.h>
#include <math.h>
#include <stdlib.h>

typedef struct
{
    double x;
    double y;
}POINT;
POINT result[102];                          //保存凸包上的点，相当于所说的栈S
POINT a[102];

int n,top;

// 两点间的距离
double Distance(POINT p1,POINT p2) {
    return sqrt((p1.x-p2.x)*(p1.x-p2.x)+(p1.y-p2.y)*(p1.y-p2.y));
}

// 叉积
double Multiply(POINT p1,POINT p2,POINT p3) {
   return ((p2.x-p1.x)*(p3.y-p1.y)-(p2.y-p1.y)*(p3.x-p1.x));
}

// 根据叉积来判断，如果叉积相同，那就比较距离长度来比较
int Compare(const void *p1,const void *p2) {
    POINT *p3,*p4;
    double m;
    p3=(POINT *)p1;
    p4=(POINT *)p2;
    m=Multiply(a[0],*p3,*p4) ;
    if(m<0)
        return 1;
    else if(m==0&&(Distance(a[0],*p3)<Distance(a[0],*p4)))
        return 1;
    else
        return -1;
}

//寻找凸包的过程，p0,p1,p2..的寻找过程在下面main中进行了
void Tubao() {
   int i;

   result[0].x=a[0].x;
   result[0].y=a[0].y;
   result[1].x=a[1].x;
   result[1].y=a[1].y;
   result[2].x=a[2].x;
   result[2].y=a[2].y;
   top=2;
   for(i=3;i<=n;i++) {
       while(Multiply(result[top-1],result[top],a[i])<=0 && top>2)
            top--;
       result[top+1].x=a[i].x;
       result[top+1].y=a[i].y;
       top++;
   }
}

// 主函数开始
int main() {
   int i,p;
   double px,py,len,temp;
   while(scanf("%d",&n)!=EOF) {
       for(i=0;i<n;i++)
           scanf("%lf%lf",&a[i].x,&a[i].y);

       if(n==1) {
           printf("0.00/n");
           continue;
       }
       else if(n==2) {
           printf("%.2lf/n",Distance(a[0],a[1]));
           continue;
       }

       //这里的目的好像是找出y坐标最小的点，之后把他定义为P0
       py=-1;
       for(i=0;i<n;i++) {
           if(py==-1 || a[i].y<py) {
               px=a[i].x;
               py=a[i].y;
               p=i;
           }
           else if(a[i].y==py && a[i].x<px) {
               px=a[i].x;
               py=a[i].y;
               p=i;
           }
       }
       //swap(a[0],a[p])
       temp=a[0].x;
       a[0].x=a[p].x;
       a[p].x=temp;
       temp=a[0].y;
       a[0].y=a[p].y;
       a[p].y=temp;


       //用叉乘来实现排序的比较
       qsort(&a[1],n-1,sizeof(double)*2,Compare);
       a[n].x=a[0].x;
       a[n].y=a[0].y;

       Tubao();

       len=0.0;
       for(i=0;i<top;i++)
           len=len+Distance(result[i],result[i+1]);
       printf("%.2lf\n",len);
   }
   return 0;
}

