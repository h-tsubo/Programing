#include <stdio.h>

int main(void)
{
    int i;
    char str[] = "ABC\0DEF";


    printf("This STRING str is \"%s\"\n", str);
    printf("The last letter of this STRING is %d\n", str[7]);

    return 0;
    }
