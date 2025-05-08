<?php

class MatrixView extends WebPageTemplateView
{
    private $user;

    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
    }

    public function createForm()
    {
        $this->setPagetitle();
        $this->createPageBody();
        $this->createWebPage();
    }

    public function getHTMLOutput()
    {
        return $this->html_page_output;
    }

    private function setPagetitle()
    {
        $this->pagetitle = "Login";
    }

    public function setInfo($user)
    {
        $this->user = $user;
    }

    private function createPageBody()
    {
        $address = APP_ROOT_PATH;
        $info_text = 'this is a test';
        $page_heading = 'Login';

        foreach ($this->user as $user) {
            $user = $user['user_id'];
            $user_first_name = htmlspecialchars($user['first_name']) ?? "N/A";
            $user_last_name = htmlspecialchars($user['last_name']) ?? "N/A";
            $user_role = htmlspecialchars($user['role']) ?? "N/A";
            $asbestos = $user['asbestos'] ?? "N/A";
            $control = $user['control'] ?? "N/A";
            $coshh = $user['coshh'] ?? "N/A";
            $dermatitis = $user['dermatitis'] ?? "N/A";
            $electrical = $user['electrical'] ?? "N/A";
            $environment = $user['environment'] ?? "N/A";
            $fire_marshall = $user['fire_marshall'] ?? "N/A";
            $fire_safety = $user['fire_safety'] ?? "N/A";
            $hand = $user['hand'] ?? "N/A";
            $legionella = $user['legionella'] ?? "N/A";
            $manual = $user['manual'] ?? "N/A";
            $mental = $user['mental'] ?? "N/A";
            $noise = $user['noise'] ?? "N/A";
            $ptwi = $user['ptwi'] ?? "N/A";
            $ppe = $user['ppe'] ?? "N/A";
            $quality = $user['quality'] ?? "N/A";
            $security = $user['security'] ?? "N/A";
            $spill = $user['spill'] ?? "N/A";
            $stress = $user['stress'] ?? "N/A";
            $vibration = $user['vibration'] ?? "N/A";
            $w_h  = $user['w_h'] ?? "N/A";
        }


        $this->html_page_content = <<< HTMLFORM
        <body>
        <br> <br> <br> <br> <br> <br>
    <table>
        <thead>
          <tr>
            <th>First Name</th>
            <th>Surname</th>
            <th>Asbestos</th>
            <th>Control of Contractors & Visitors</th>
            <th>COSHH Awareness</th>
            <th>Dermatitis Awareness</th>
            <th>Electrical Awareness</th>
            <th>Environmental Awareness</th>
            <th>Fire Marshall Awareness</th>
            <th>Fire Safety Awareness</th>
            <th>Hand Pallet Truck Instruct</th>
            <th>Legionella Awareness</th>
            <th>Manual Handling Awareness</th>
            <th>Mental Health Awareness</th>
            <th>Noise Control Awareness</th>
            <th>Permit to Work Instruction</th>
            <th>PPE Awareness</th>
            <th>Quality System Awareness</th>
            <th>Security Control Awareness</th>
            <th>Spill Control Awareness</th>
            <th>Stress Awareness</th>
            <th>Vibration Awareness</th>
            <th>W@H</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>$user_first_name</td>
              <td>$user_last_name</td>
              <td>$user_role</td>
              <td$asbestos</td>
              <td$control</td>
              <td>$coshh</td>
              <td>$dermatitis</td>
              <td>$electrical</td>
              <td>$environment</td>
              <td>$fire_marshall</td>
              <td>$fire_safety</td>
              <td>$hand</td>
              <td>$legionella</td>
              <td>$manual</td>
              <td>$mental</td>
              <td>$noise</td>
              <td>$ptwi</td>
              <td>$ppe</td>
              <td>$quality</td>
              <td>$security</td>
              <td>$spill</td>
              <td>$stress</td>
              <td>$vibration</td>
              <td>$w_h</td>
            </tr>
        </tbody>
    </table>
    </table>
</body>

HTMLFORM;

    }
}

