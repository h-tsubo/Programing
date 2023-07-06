#include <stdio.h>

void put_char(int ch, int n)
{
    while (n-- > 0){
        putchar(' ');
       putchar(ch);
        putchar(' ');
        }
    }

int main(void)
{
    int i, len;
    scanf("%d", &len);

    for (i = 1; i <= len; i++){
        put_char(' ', len - i);
        put_char('*', i);
        puts("\n");
        }
        
    return 0;
    }
