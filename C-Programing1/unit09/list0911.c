#include <stdio.h>
#include <ctype.h>

void str_toupper(char s[])
{
    int i = 0;

    while (s[i]){
        s[i] = toupper(s[i]);
        i++;
        }
    }

void str_tolower(char s[])
{
    int i = 0;

    while (s[i]){
        s[i] = tolower(s[i]);
        i++;
        }
    }

int main(void)
{
    char str[128];

    puts("Please enter any string.");
    scanf("%s", str);

    str_toupper(str);
    printf("Upper case of string str:%s\n", str);

    str_tolower(str);
    printf("Lower case of string str:%s\n", str);

    return 0;
    }
