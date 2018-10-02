#include <stdio.h>

void putstars(int n)
{
    while (n-- > 0){
        printf(" * ");
        }
    }

int main(void)
{
    int i, len;
    scanf("%d", &len);

    for (i = 1; i <= len; i++){
        putstars(i);
        puts("\n");
        }
        
    return 0;
    }
