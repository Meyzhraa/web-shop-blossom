class NestedTryDemo{
    public static void main(String args[]){
        try{
            int a = Integer.parseInt(args[0]);
            try{
                int b = Integer.parseInt(args[1]);
                System.out.println(a/b);
            }
            catch (ArithmeticException e){
                System.out.println("Error, pembagi bernilai nol!");
            }
        } catch (ArrayIndexOutOfBoundsException e2){
            System.out.println("Dibutuhkan dua parameter/argument!");
        }
    }
}