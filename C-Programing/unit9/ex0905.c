#include <stdio.h>
int str_char(const char v[], char c)
{
    int i;

    for (i = 0; v[i] != c; i++);
    
    return i;
    }
int main(void)
{
    char str[128];
    char d;

    puts("Please enter any string.");
    scanf("%s", str);

    puts("Please enter a letter you want to search");
    scanf("%c", &d);

    printf("The letter you searched first appears at str[%d]\n", str_char(str, d));
    return 0;
    }
