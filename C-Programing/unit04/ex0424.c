#include <stdio.h>

int main(void)
{
    int i, j,  n;
    scanf("%d", &n);
    for (i = 1; i <= n; i++){
        for (j = 1; j <= 2 * n - 1; j++){
            if (j <= n - i || j >= n + i){
                putchar(' ');
                putchar(' ');
                putchar(' ');
            }
            else{
                putchar(' ');
                putchar('*');
                putchar(' ');
            }
            }
        puts("\n");
        }

    return 0;
    }
