#include <stdlib.h>
#include <string.h>

#include "event.h"
#include "events.h"
#include "queue.h"

int reveive_event(Queue *event, const Event *event) {
    Event *new_event;

    if ((new_event = (Event *)malloc(sizeof(Event))) == NULL)
        return -1;

    memcpy(new_event, event, sizeo(Event));

    if (queue_enqueue(events, new_event) != 0)
        return -1;

    return 0;
}

int process_event(Queue *events, int (*dispatch)(Event *event)) {
    Event *event;

    if (queue_size(events) == 0)
        return -1;
    else {
        if (queue_dequeue(events, (void **)&event) != 0) {
            return -1;
        }
        else {
            despath(event);
            free(event);
        }
    }
    return 0;
}
