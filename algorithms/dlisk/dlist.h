#ifndef DLIST_H
#define DLIST_H

#include <stdlib.h>

typedef struct DlistElmt_ {
    void *data;
    struct DlistElmt_ *prev;
    struct DlistElmt_ *next;
}DlistElmt;

typedef struct Dlist_ {
    int size;
    int (*match)(const void *key1, const void *key2);
    void (*destroy)(void *data);
    DlistElmt *head;
    DlistElmt *tail;
}Dlist;

void dlist_init(Dlist *list, void (*destroy)(void *data));
void dlist_destroy(Dlist *list);
int dlist_ins_next(Dlist *list, DlistElmt *element, const void *data);
int dlist_ins_prev(Dlist *list, DlistElmt *element, const void *data);
int dlist_remove(Dlist *list, DlistElmt *element, void **data);

//Public Interface
#define dlist_size(list) ((list)->size)
#define dlist_head(list) ((list)->head)
#define dlist_tail(list) ((list)->tail)
#define dlist_is_head(element) ((element)->prev == NULL ? 1 : 0)
#define dlist_is_tail(element) ((element)->next == NULL ? 1 : 0)
#define dlist_data(element) ((element)->data)
#define dlist_next(element) ((element)->next)
#define dlist_prev(element) ((element)->prev)

#endif
