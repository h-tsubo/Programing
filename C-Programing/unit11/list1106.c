#include <stdio.h>

char *str_copy(char *d, const char *s)
{
    char *t = d;
    while (*d++ = *s++);

    return t;
    }

int main(void)
{
    char str[128] = "ABC";
    char temp[128];

    printf("str = \"%s\"\n", str);

    printf("The string you copy : ");
    scanf("%s", temp);

    str_copy(str, temp);

    puts("The string is copied.");
    printf("str = \"%s\"", str);

    return 0;
    }
