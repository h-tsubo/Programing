#include <stdio.h>

int str_length(const char s[])
{
    int len = 0;

    while (s[len])
        len++;

    return len;
    }
int main(void)
{
    char str[128];

    puts("Please enter any string.");
    scanf("%s", str);
    
    printf("The string \"%s\" has %d letters\n", str, str_length(str));

    return 0;
    }
