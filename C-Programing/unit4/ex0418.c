#include <stdio.h>

int main(void)
{
    int i, n;
    scanf("%d", &n);

    for (i = n; i >= 5; i -= 5)
        puts("*****");
    for(; i > 0; i-- )
        printf("*");

    puts("\n");

    return 0;
    }
