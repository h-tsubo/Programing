#include <stdio.h>
void put_string(const char s[])
{
    int i = 0;

    while (s[i]){
        putchar(s[i++]);
        }
    }
int main(void)
{
    char str[128];
    puts("Please enter any string.");
    scanf("%s", str);

    put_string(str);
    puts("");

    return 0;
    }
