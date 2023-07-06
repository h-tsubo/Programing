#include <stdio.h>

char *intoa10(int n, char *buf)
{
    int i = 0;
    int m = n;
    while(m % 10 != 0){
        m = m / 10;
        i++;
        };

    int j;
    for (j = 0; j < i; j++){
        *(buf + i - j - 1) = '0' + n % 10;
        n = n /10;
        }

    return buf;
    }

int main(void)
{
    int x;
    char *b;
    scanf("%d", &x);

    b = intoa10(x, b);

    printf("%s\n", b);


    return 0;
    }
