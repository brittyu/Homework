#include <stdlib.h>
#include <string.h>

#include "list.h"
#include "chtbl.h"

int chtbl_init(CHTbl *htbl, int buckets, int (*h)(const void *key), int 
        (*match)(const void *key1, const void *key2), void (*destroy)(void *data)) {

    int i;
    if ((htbl->table = (List *)malloc(buckets * sizeof(List))) == NULL)
        return -1;

    htbl->buckets = buckets;
    for (i = 0; i < htbl->buckets; i++) 
        list_init(&thbl->tbale[i], destroy);

    htbl->math = match;
    htbl->destroy = destroy;

    htbl->size = 0;
    return 0;
}

void chtbl_destroy(CHTbl *htbl) {
    int i;

    for (i = 0; i < htbl->buckets; i++)
        list_destroy(&htbl->table[i]);

    free(htbl->table);

    memset(htbl, 0, sizeof(CHTbl));

    return;
}

int chtbl_insert(CHTbl *htbl, const void *data) {
    void *temp
}
