#include<stdio.h>
#include<math.h>

void gametable(int k)
{       
    int a[100][100];
    int n,temp,i,j,p,t;
    //k=0两个参赛选手日程可以直接求得
    n=2;
    a[1][1]=1;a[1][2]=2;
    a[2][1]=2;a[2][2]=1;
    // 开始依次处理k为不同的值的时候的操作
    for(t=1;t<k;t++) {
        temp=n;
        n=n*2;
        //填左下角元素
        for(i=temp+1;i<=n;i++) {
            for(j=1;j<=temp;j++) {
                a[i][j]=a[i-temp][j]+temp;
            }
        }

        // 左下角元素对应的是右上角元素
        for(i=1;i<=temp;i++) {
            for(j=temp+1;j<=n;j++) {
                a[i][j]=a[i+temp][j-temp];
            }
        }

        // 左上角元素对应右下角元素
        for(i=temp+1;i<=n;i++) {
            for(j=temp+1;j<=n;j++) {
                a[i][j]=a[i-temp][j-temp];
            }
        }
     
    }
    // 打印结果
    for(i=1;i<=n;i++)
        for(j=1;j<=n;j++)
        {
            printf("%d ",a[i][j]);
                if(j==n)
                printf("\n");
        
        }
}

void main()
{
    int k;
    printf("input number:\n");
    scanf("%d",&k);
    //　如果不是０开始执行操作
    if(k>0) {
        gametable(k);
    }
    
}
