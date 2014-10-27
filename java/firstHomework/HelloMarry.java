public class HelloMarry {
    public static void main(String[] args) {
        boolean canMarry;
        Person p1 = new Person("jack", 25, 'w');
        Person p2 = new Person("luxi", 22, 'm');

        canMarry = p1.marry(p2);

        if (canMarry) {
            System.out.println("Marry");
        }
        else {
            System.out.println("can not Marry");
        }
    }
}

class Person {
    String name;
    int age;
    char gender;
    String partner;

    public Person(String name, int age, char gender) {
        this.name = name;
        this.age = age;
        this.gender = gender;
    }

    boolean marry(Person p) {
       if (this.checkPerson() && p.checkPerson()) {
           if (this.gender != p.gender) {
               this.partner = p.name;
               p.partner = this.name;

               return true;
           }
       }

       return false;
    }

    // To check the token to marry
    boolean checkPerson() {
        if (this.gender == 'w') {
            if (this.age <= 23) {
                return false;
            }
        }
        else {
            if (this.age <= 21) {
                return false;
            }
        }

        return true;
    }
}
