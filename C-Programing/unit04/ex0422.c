#include <stdio.h>

int main(void)
{
    int i, j;
    int height, width;

    scanf("%d%d", &height, &width);
    if (height > width){
        i = height;
        height = width;
        width = i;
        }


    for (i = 1; i <= height; i++){
        for (j = 1; j <= width; j++)
            printf("  *");

        puts("\n");
        }

    return 0;
    }
