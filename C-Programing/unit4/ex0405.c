# include <stdio.h>

int main(void)
{
    int n;
    scanf("%d", &n);
    int i = 1;

    if (n <= 0)
        ;
    else
        while (i <= n){
            printf("%d\n", i++);
            };

    return 0;
    }
