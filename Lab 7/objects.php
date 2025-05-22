<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<main>
    <h3>Objects in PHP</h3>

    <?php
    interface Employee {
        public function displayEmployeeInfo();
    }

    class Management implements Employee {
        protected $sin;
        protected $age;
        protected $salary;

        public function __construct($sin, $age, $salary) {
            $this->sin = $sin;
            $this->age = $age;
            $this->salary = $salary;
        }

        public function displayEmployeeInfo() {
            echo "SIN: $this->sin, Age: $this->age, Salary: $this->salary<br>";
        }
    }

    class Manager extends Management {
        private $adminLevel;

        public function __construct($sin, $age, $salary, $adminLevel) {
            parent::__construct($sin, $age, $salary);
            $this->adminLevel = $adminLevel;
        }

        public function displayEmployeeInfo() {
            parent::displayEmployeeInfo();
            echo "Admin Level: $this->adminLevel<br>";
        }
    }

    class Development implements Employee {
        protected $sin;
        protected $age;
        protected $salary;

        public function __construct($sin, $age, $salary) {
            $this->sin = $sin;
            $this->age = $age;
            $this->salary = $salary;
        }

        public function displayEmployeeInfo() {
            echo "SIN: $this->sin, Age: $this->age, Salary: $this->salary<br>";
        }
    }

    class ITSpecialist extends Development {
        private $projectAssigned;

        public function __construct($sin, $age, $salary, $projectAssigned) {
            parent::__construct($sin, $age, $salary);
            $this->projectAssigned = $projectAssigned;
        }

        public function displayEmployeeInfo() {
            parent::displayEmployeeInfo();
            echo "Project Assigned: $this->projectAssigned<br>";
        }
    }

    $manager1 = new Manager("123-45-6789", 40, 90000, "Level 1");
    $manager2 = new Manager("987-65-4321", 35, 85000, "Level 2");

    $manager1->displayEmployeeInfo();
    $manager2->displayEmployeeInfo();

    $itSpecialist1 = new ITSpecialist("111-22-3333", 30, 70000, "Project Alpha");
    $itSpecialist2 = new ITSpecialist("444-55-6666", 28, 68000, "Project Beta");

    $itSpecialist1->displayEmployeeInfo();
    $itSpecialist2->displayEmployeeInfo();
    ?>
</main>

<?php include 'footer.php'; ?>
