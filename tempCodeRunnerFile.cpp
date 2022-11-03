#include<bits/stdc++.h>


using namespace std;


int solution(int numbers[])
{  int count =0;

int p = sizeof(numbers)/sizeof(numbers[0]);
    
    for(int i=0;i<p;i++)
    {  int sum =0;
        for(int j =i+1;j<p;i++)
        {
            sum = numbers[i] + numbers[j];


          for(int k =0;k<p;k++)
          {
              if(sum = numbers[k])
              count++;

          }
            
        }

    }
    return count;



}


int main()
{

    int n;
    cout<<"enter the nuber of element in array";
    cin>>n;
    int arr[n];

    for(int i =0;i<n;i++)
    {
        cin>>arr[i];
    }

    int count =  solution(arr);
    cout<<count;


}