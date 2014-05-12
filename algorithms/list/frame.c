#include <stdlib.h>

#include "frame.h"

#include "list.h"

int alloc_frame(List *frames) {
    int frame_number, *data;

    if (list_size(frames) == 0)
        return -1;
    else {
        if (list_rem_next(frames, NULL, (void **)&data) != 0)
            return -1;
        else {
            frame_number = *data;
            free(data);
        }
    }
    return frame_number;
}

int free_frame(List *frame, int frame_number) {
    int *data;

    if ((data = (int *)malloc(sizeof(int))) == NULL)
        return -1;

    *data = frame_number;
    if (list_ins_next(frames, NULL, data) != 0)
        return -1;

    return 0;
}
