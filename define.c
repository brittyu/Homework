#include <stdio.h>

#define M(y) y * y + 3 * y

int main() {
    int k;
    k = M(5);
    printf("%d", k);
    return 0;
}
