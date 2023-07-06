#include <stdio.h>

int main(void)
{
    char *p = "123";

    printf("p = %s\n", p);

    p = "456" + 1;
    puts("p has been rewritten");
    printf("p = %s\n", p);

    return 0;
    }
