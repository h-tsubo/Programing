#include <stdio.h>

void mat_mul(const int a[4][3], const int b[3][4], int c[4][4])
{
    int i, j;
    for (i = 0; i < 4; i++)
        for (j = 0; j < 4; j++)
            c[i][j] = a[i][0] * b[j][0] + a[i][1] * b[1][j] + a[i][2] * b[2][j];
    }

void mat_print_a(const int m[4][3])
{   
    int i, j;
    for (i = 0; i < 4; i++){
        for (j = 0; j < 3; j++)
           printf("%4d", m[i][j]);
        puts("\n");
        }
    }

void mat_print_b(const int m[3][4])
{   
    int i, j;
    for (i = 0; i < 3; i++){
        for (j = 0; j < 4; j++)
           printf("%4d", m[i][j]);
        puts("\n");
        }
    }

void mat_print_c(const int m[4][4])
{   
    int i, j;
    for (i = 0; i < 4; i++){
        for (j = 0; j < 4; j++)
           printf("%6d", m[i][j]);
        puts("\n");
        }
    }

int main(void)
{
    int x[4][3] = { {91, 63, 78}, {67, 72, 46}, {89, 34, 53}, {32, 54, 34} };
    int y[3][4] = { {97, 67, 82, 73}, {43, 46, 97, 56}, {62, 85, 46, 35} };
    int prod[4][4];

    mat_mul(x, y, prod);
    puts("The matrix x"); mat_print_a(x);
    puts("The matrix y"); mat_print_b(y);
    puts("The matrix prod"); mat_print_c(prod);

    return 0;
    }
