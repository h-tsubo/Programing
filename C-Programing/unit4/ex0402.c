#include <stdio.h>

int main(void)
{
    int a, b;
    int sum = 0;
    scanf("%d%d", &a, &b);
    do {
        sum += a;
        a++;
        } while (a <= b);
    printf("%d\n", sum);

    return 0;
    }
