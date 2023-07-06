#include <stdio.h>

struct xyz {
    int x;
    long y;
    double z;
    };

struct xyz xyz_of(int x, long y, double z){
    struct xyz temp;

    temp.x = x;
    temp.y = y;
    temp.z = z;

    return temp;
    }

int main(void)
{
    struct xyz s ={0, 0, 0};

    s = xyz_of(12, 90000, 89.3);

    printf("xyz.x = %d\n", s.x);
    printf("xyz.y = %ld\n", s.y);
    printf("xyz.x = %.1f\n", s.z);

    return 0;
    }
