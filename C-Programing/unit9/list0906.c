#include <stdio.h>

int main(void)
{
    int i;
    char cs[][6] = {"ABC", "DEFG", "ZGDS"};

    for (i = 0; i < 3; i++)
        printf("cs[%d] = \"%s\"\n", i, cs[i]);

    printf("%s\n", cs[1]);
    printf("%d\n", cs[1][5]);

    return 0;
    }
