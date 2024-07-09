<?php 

function allspec(){
    $conn = mysqli_connect('localhost', 'root', '', 'ikp');
    $spec = mysqli_query($conn, "SELECT * FROM `specialists` ");
    while($special = mysqli_fetch_assoc($spec)){
        
        echo("<option value=".$special['fio'].">".$special['fio']."</option>");
    }
}

function terapevts(){
    $conn = mysqli_connect('localhost', 'root', '', 'ikp');
    $ter = mysqli_query($conn, "SELECT * FROM `specialists` WHERE `prof` = 'Терапевт' ");
    while($terap = mysqli_fetch_assoc($ter)){
        
        echo("<option class=\"terap\" value=".$terap['fio'].">".$terap['fio']."</option>");
    }
}

function defectologs(){
    $conn = mysqli_connect('localhost', 'root', '', 'ikp');
    $def = mysqli_query($conn, "SELECT * FROM `specialists` WHERE `prof` = 'Дефектолог' ");
    while($defect = mysqli_fetch_assoc($def)){ 
        echo("<option class=\"defectol\" value=".$defect['fio'].">".$defect['fio']."</option>");
    }
}

function psyhologs(){    
    $conn = mysqli_connect('localhost', 'root', '', 'ikp');
    $psy = mysqli_query($conn, "SELECT * FROM `specialists` WHERE `prof` = 'Психолог' ");
    while($psyho = mysqli_fetch_assoc($psy)){
        
        echo("<option class=\"psyho\" value=".$psyho ['fio'].">".$psyho ['fio']."</option>");
    }
}

function logopeds(){ 
    $conn = mysqli_connect('localhost', 'root', '', 'ikp');
    $log = mysqli_query($conn, "SELECT * FROM `specialists` WHERE `prof` = 'Логопед' ");
    while($logoped = mysqli_fetch_assoc($log)){
        echo("asdsad");
        echo("<option class=\"logop\" value=".$logoped ['fio'].">".$logoped ['fio']."</option>");
    }
}
?>