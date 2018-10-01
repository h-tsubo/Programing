#include <stdio.h>

int main(void)
{
    int sum = 0;
    int cnt = 0;
    int retry;

    do {
        int t;
        scanf("%d", &t);
        sum += t;
        cnt++;
        puts("Still enter the number? [Yes:0/No:9]");
        scanf("%d", &retry);
        } while (retry == 0);

    printf("SUM:%d\nAVERAGE:%.2f\n", sum, (double)sum / cnt);

    return 0;
    }
