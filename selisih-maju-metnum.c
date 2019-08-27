#include <stdio.h>
#include <math.h>
#include <windows.h>
#include <conio.h>
double a,b,x,fm,fm2,fmaju1,fmaju2,fx,error,sigma=0,total_error,h;
int i=0;

double f(double x)
{
	return((x*x*x)-(2*(x*x))-x);
}

double ftambahH(double x)
{
	return(f(x+h));	
}

double ftambah2H(double x)
{
	return(f(x+(2*h)));
}

double fungsi_maju(double x,double h)
{
	return((f(x+h)-f(x))/h);	
}

double fungsi_maju2(double x,double h)
{
	return((f(x+(2*h))-(2*(f(x+h)))+f(x))/(h*h));
}


void maju()
{
	printf("Masukan Batas Atas : ");
	scanf("%lf",&b);
	printf("Masukan Batas Bawah : ");
	scanf("%lf",&a);
	printf("Masukan nilai h : ");
	scanf("%lf",&h);
	system("cls");
	printf("Rumus dari f(x) adalah = x^3-2x^2-x \n");
	getch();
	printf("Batas Atas adalah : %lf", b);
	getch();
	printf("\nBatas Bawah adalah : %lf", a);
	getch();
	printf("\nh yang dipakai : %lf\n", h);
	getch();
	puts("=======================================================================================================");
	printf("%s\t %8s\t %8s\t %8s\t %8s\t %8s\t %8s\n\n","x","f(x)","f'(x)","f(x+2h)","f(x+h)","f''(x)","error");
	puts("=======================================================================================================");
	for(x=a;x<=b;x+=h)
	{	i++;
		fx=f(x);
		fm=fungsi_maju(x,h);
		fmaju1=ftambahH(x);
		fmaju2=ftambah2H(x);
		fm2=fungsi_maju2(x,h);
		error=fabs((h*fm2)/2);//mencari error
		printf(" %g \t %8lf \t %8lf \t %8lf \t %8lf \t %8lf \t %8lf\n",x,fx,fm,fmaju2,fmaju1,fm2,error);
		sigma=sigma+error;	
	}
	total_error=sigma/i;//rata-rata error
	printf("\nRata-rata error = %lf\n",total_error);	
	puts("=====================================END OF LINE=======================================================");
}

main()
{	puts("\t====================");
	puts("\t    DIFFERENSIAL");
	puts("\tMetode Selisih Maju");
	puts("\t====================\n\n");
	maju();
}
