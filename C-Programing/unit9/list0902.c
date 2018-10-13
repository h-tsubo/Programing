#include <stdio.h>

int main(void)
{
    int i;
    char str[4];

    for (i = 0; i < 3; i++)
        str[i] = 'A' + i;
    str[3] = '\0';

    printf("This STRING str is \"%s\"\n", str);

    return 0;
    }
