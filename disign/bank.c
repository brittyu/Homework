#include <stdio.h>
#include <stdlib.h>
#define random() (rand()%20000 - 10000)
#define randomTime() (rand()%40)

typedef struct poolElem_ {
    int arrtime;
    int durtime;
    long amount;
    struct poolElem_ *next;
} poolElem;

typedef struct pool_ {
    poolElem *head;
    poolElem *tail;
} pool;

int BeginWork(pool *second, int worktime, int closetime, float *Avg, long total);
int addLastFirst(int arrtime, int checkRecord, int closetime, float *Avg);
void PrintfPeople(int checkRecord, float *Avg);
poolElem *firstQueue(int worktime);


int main() {
    int closetime = -1;
    long total;
    int worktime = 0;

    float *Avg = (float *)malloc(sizeof(float));
    int checkRecord;
    int people;

    int travel;

    pool *second = (pool *)malloc(sizeof(pool));

    second->head = (poolElem *)malloc(sizeof(poolElem));
    second->tail = (poolElem *)malloc(sizeof(poolElem));

    second->head = NULL;
    second->tail = NULL;

    printf("Enter the closetime :");
    scanf("%d", &closetime);
    printf("Enter the total :");
    scanf("%ld", &total);

    checkRecord = BeginWork(second, worktime, closetime, Avg, total);


    PrintfPeople(checkRecord, Avg);
}

// 开始进行工作
int BeginWork(pool *second, int worktime, int closetime, float *Avg, long total) {
    int checkRecord = 1;
    long checkTotal;
    int durtime;
    poolElem *newMan = (poolElem *)malloc(sizeof(poolElem));
    poolElem *checkHead = (poolElem *)malloc(sizeof(poolElem));
    poolElem *orderMan = (poolElem *)malloc(sizeof(poolElem));

    //if (newMan->arrtime) printf("hello world");
    while (worktime <= closetime && closetime > 0) {
        // 产生一个客户
        newMan = firstQueue((newMan->arrtime) ? newMan->arrtime : worktime);
        if (!(newMan->arrtime)) exit(1);
        if (newMan->arrtime > worktime) {
            worktime = newMan->arrtime;
        }

        // 如果是存进去的钱是零，直接跳到下一个客户中
        if (newMan->amount == 0) continue;

        // 判断如果是取钱的情况
        if (newMan->amount < 0) {
            // 判断如果是能够直接从银行中取到，则执行下列操作
            if (newMan->amount * (-1) < total) {
                total = total + newMan->amount;
                durtime = randomTime();
                *Avg += (worktime - newMan->arrtime + durtime);
                checkRecord++;
                worktime += durtime;
            }

            // 取不到所要求的金额，到第二个队列中排队
            else {
                // 检查是是否是空队列
                if (second->tail == NULL && second->head == NULL) {
                    second->head = newMan;
                    second->tail = newMan;
                }
                else {
                    second->tail->next = newMan;
                    second->tail = newMan;
                }
            }
        }
        // 存钱操作
        else {
            total = total + newMan->amount;
            durtime = randomTime();
            *Avg += (worktime - newMan->arrtime + randomTime());
            worktime += durtime;
            checkRecord++;

            //while (checkHead != second->head && second->head != NULL) {
            if (second->head != NULL) {
                checkHead = second->head;
                do {
                    checkTotal = second->head->amount + total;
                    printf("%ld\n", checkTotal);
                    if (checkTotal >= 0) {
                        total = total + second->head->amount;
                        durtime = randomTime();
                        *Avg += (worktime - newMan->arrtime + durtime);
                        checkRecord++;
                        worktime += durtime;
                        orderMan = second->head;
                        second->head = second->head->next;
                        free(orderMan);
                    }
                    else {
                        second->tail->next = second->head;
                        second->tail = second->head;
                        second->head = second->head->next;
                    }
                } while (checkHead != second->head && second->head != NULL);
            }
        }
    }

    addLastFirst(newMan->arrtime, checkRecord, closetime, Avg);
    // 银行营业时间到，将第二个队列中客户等待的时间加起来
    for (; second->head != second->tail; checkRecord++) {
        *Avg += (closetime - second->head->arrtime);
        orderMan = second->head;
        second->head = second->head->next;
        printf("hello world");
        free(orderMan);
    }
    return checkRecord;
}

// 打印结果
void PrintfPeople(int checkRecord, float *Avg) {
    printf("一共进行了 %d 次业务\n", checkRecord);
    printf("客户在银行平均逗留时间 %f\n", *(Avg) / checkRecord);
}

poolElem *firstQueue(int worktime) {
    poolElem *newMan = (poolElem *)malloc(sizeof(poolElem));
    newMan->arrtime = worktime + randomTime();
    newMan->amount = random();
    newMan->next = (poolElem *)malloc(sizeof(poolElem));
    newMan->next = NULL;
    return newMan;
}

// arrtime 是在银行关闭的时候第一个队列进行业务的最后一个客户到达的银行的时间
int addLastFirst(int arrtime, int checkRecord, int closetime, float *Avg) {
    int firstQueueArrtime;
    // 添加在第一个队列中排队，但是没有时间进行业务的客人等待时间
    while (firstQueueArrtime = (closetime > arrtime + randomTime()) ? (arrtime + randomTime()) : 0) {
        *Avg += (closetime - (arrtime + randomTime()));
        arrtime = arrtime + randomTime();
    }
}
