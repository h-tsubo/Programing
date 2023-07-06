#include <stdio.h>

int str_length(const char *s)
{
    int len = 0;
    while (*s++)
        len++;
    return len;
    }

int main(void)
{
    char str[128];
    printf("Please enter any strings : ");
    scanf("%s", str);

    printf("The lenght of string\"%s\" is %d\n", str, str_length(str));

    return 0;
    }
