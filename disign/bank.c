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

void PrintfPeople(int checkRecord, long *record);
poolElem *firstQueue(int *worktime);
//int MyFree(pool *top, int worktime);


int main() {
    //must delet
    int must = 0;
    int closetime;
    long total;
    int *worktime;
    worktime = &must;

    long record[100];
    int checkRecord = 1;

    int people;
    long checkTotal;

    int travel;

    poolElem *checkHead = (poolElem *)malloc(sizeof(poolElem));
    poolElem *newMan = (poolElem *)malloc(sizeof(poolElem));
    poolElem *orderMan = (poolElem *)malloc(sizeof(poolElem));
    pool *second = (pool *)malloc(sizeof(pool));

    second->head = (poolElem *)malloc(sizeof(poolElem));
    second->tail = (poolElem *)malloc(sizeof(poolElem));

    second->head = NULL;
    second->tail = NULL;

    printf("Enter the closetime");
    scanf("%d", &closetime);
    printf("Enter the total");
    scanf("%ld", &total);

    while (*worktime <= closetime) {
        newMan = firstQueue(worktime);
        if (newMan->amount < 0) {
            if (newMan->amount * (-1) < total) {
                total = total + newMan->amount;
                record[checkRecord] = newMan->amount;
                checkRecord++;
                *worktime += newMan->durtime;
            }
            else {
                if (second->tail == NULL) {
                    second->head = newMan;
                    second->tail = newMan;
                }
                else {
                    second->tail->next = newMan;
                    second->tail = newMan;
                }
            }
        }
        else {
            total = total + newMan->amount;
            record[checkRecord] = newMan->amount;
            checkRecord++;
            //检查在用户存储钱进去后是否能够解决第二列的业务
            checkHead = second->head;
            while (checkHead != second->head && second->head != NULL) {
                checkTotal = second->head->amount + total;
                if (checkTotal >= 0) {
                    total = total + second->head->amount;
                    record[checkRecord] = second->head->amount;
                    checkRecord++;
                    *worktime += *worktime + second->head->durtime;
                    orderMan = second->head;
                    second->head = second->head->next;
                    free(orderMan);
                }
                else {
                    second->tail->next = second->head;
                    second->tail = second->head;
                    second->head = second->head->next;
                }
            }
        }
    }

    PrintfPeople(checkRecord, record);
    printf("%ld", total);
}

int MyMalloc(pool *top, pool *man, int worktime) {

}

void PrintfPeople(int checkRecord, long *record) {
    int i;
    for (i = 1; i < checkRecord; i++) {
        printf("%d do %ld\n", i, *(record + i));
    }
}
poolElem *firstQueue(int *worktime) {
    poolElem *newMan = (poolElem *)malloc(sizeof(poolElem));
    newMan->arrtime = *worktime + randomTime();
    newMan->durtime = randomTime();
    newMan->amount = random();
    newMan->next = (poolElem *)malloc(sizeof(poolElem));
    newMan->next = NULL;
    return newMan;
}
