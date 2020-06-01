class Leaders  
{ 
    void printLeader(int arr[], int s)  
    { 
        for (int i = 0; i < s; i++)  
        { 
            int j; 
            for (j = i + 1; j < s; j++)  
            { 
                if (arr[i] <= arr[j]) 
                    break; 
            } 
            if (j == s)  
                System.out.print(arr[i] + " "); 
        } 
    } 
  
    public static void main(String[] args)  
    { 
        Leaders lead = new Leaders(); 
        int arr[] = new int[]{16, 17, 4, 3, 5, 2}; 
        int n = arr.length; 
        lead.printLeader(arr, n); 
    } 
} 