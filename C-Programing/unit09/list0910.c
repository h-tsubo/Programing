#include <stdio.h>

void str_dcount(const char s[], int cnt[])
{
    int i;
    
    while (s[i]){
        if (s[i] >= '0' && s[i] <= '9')
            cnt[s[i] - '0']++;
        i++;
        }
    }
int main(void)
{
    char str[128];
    int dcnt[10] = {0};
    int i;
    puts("Please enter any string of integert");
    scanf("%s", str);


    str_dcount(str, dcnt);

    for (i = 0; i < 10; i++)
        printf("\'%d\' : %d\n", i, dcnt[i]);

    return 0;
    }
