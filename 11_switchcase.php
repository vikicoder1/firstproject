switch (true) {
    case ($grades >= 90):
        echo "Your grade is A";
        break;
    case ($grades >= 80):
        echo "Your grade is B";
        break;
    case ($grades >= 70):
        echo "Your grade is C";
        break;
    case ($grades >= 60):
        echo "Your grade is D";
        break;
    default:
        echo "Your grade is F";
}
