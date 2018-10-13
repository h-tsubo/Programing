#include <stdio.h>
enum weeks { Mon, Tues, Wed, Thurs, Fri, Sat, Sun, Invalid };
void mon(void)
{
    puts("The day of the week is Monday!");
    }

void tues(void)
{
    puts("The day of the week is Tuesday!");
    }
void wed(void)
{
    puts("The day of the week is Wednesday!");
    }
void thurs(void)
{
    puts("The day of the week is Thursday!");
    }
void fri(void)
{
    puts("The day of the week is Friday!");
    }
void sat(void)
{
    puts("The day of the week is Saturday!");
    }
void sun(void)
{
    puts("The day of the week is Sunday!");
    }
enum weeks select (void)
{
    int temp;

    do {
        printf("0:Mon 1:Tues 2:Wed 3:Thurs 4:Fri 5:Sat 6:Sun 7:Break! ->");
        scanf("%d", &temp);
        } while (temp < Mon || Invalid < temp);
    
    return temp;
    }

int main(void)
{
    enum weeks selected;

    do {
        switch (selected = select()){
            case Mon   : mon();   break;
            case Tues  : tues();  break;
            case Wed   : wed();   break;
            case Thurs : thurs(); break;
            case Fri   : fri();   break;
            case Sat   : sat();   break;
            case Sun   : sun();   break;
            case Invalid   :  ;   break;
            } 
        } while (selected != Invalid);
    return 0;
    }
