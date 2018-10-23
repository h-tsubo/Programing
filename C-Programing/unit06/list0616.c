#include <stdio.h>

void mat_add(const int a[4][3], const int b[4][3], int c[4][3])
{
    int i, j;
    for (i = 0; i < 4; i++)
        for (j = 0; j < 3; j++)
            c[i][j] = a[i][j] + b[i][j];
    }

void mat_print(const int m[4][3])
{   
    int i, j;
    for (i = 0; i < 4; i++){
        for (j = 0; j < 3; j++)
           printf("%4d", m[i][j]);
        puts("\n");
        }
    }
int main(void)
{
    int x[4][3] = { {91, 63, 78}, {67, 72, 46}, {89, 34, 53}, {32, 54, 34}};
    int y[4][3] = { {97, 67, 82}, {73, 43, 46}, {97, 56, 62}, {85, 46, 35}};
    int sum[4][3];

    mat_add(x, y, sum);
    puts("The matrix x"); mat_print(x);
    puts("The matrix y"); mat_print(y);
    puts("The matrix sum"); mat_print(sum);

    return 0;
    }
