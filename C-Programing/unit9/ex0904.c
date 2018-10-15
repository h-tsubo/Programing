#include <stdio.h>

void str_length(char s[])
{
    int len = 0;

    while (s[len]){
        s[len] = '\0';
        len++;
        }

    }
int main(void)
{
    char str[128];

    puts("Please enter any string.");
    scanf("%s", str);

    str_length(str);
    
    printf("\"%s\"\n", str);

    return 0;
    }
