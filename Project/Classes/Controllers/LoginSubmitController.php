<?php

namespace Controllers;

use Framework\ControllerAbstract;
use Framework\Factory;

/** LoginSubmitController.php
 *
 * The Controller portion of the final Login section.
 * @author JamesPlant2009@gmail.com
 * @package cryptoshow
 */
class LoginSubmitController extends ControllerAbstract
{

    private array $sanitised_input;

    public function createHtmlOutput(): void
    {
        $this->validateInput();
        $this->checkVerify();

        $view = Factory::buildObject('LoginSubmitView');
        $view->createPage();
        $this->html_output = $view->getHtmlOutput();
    }

    //takes the user inputed data as 'tained' and runs it through the validate class in the framwork to sanitise. JP
    private function validateInput(): void
    {
        $validate = Factory::buildObject('Validate');
        $tainted = $_POST;

        $this->sanitised_input['sanitised_username'] = $validate->validateString('username', $tainted, 3, 20);
        $this->sanitised_input['validate-error'] = true;

    }

    /** Used for actually setting up the session and checking the hashed password against the supplied password.
     * Uses function 'checkAccountExists()' to create correct output.
     * @return void
     */
    private function checkVerify(): void
    {
        $db = Factory::createDatabaseWrapper();
        $model = Factory::buildObject('LoginSubmitModel');
        $model->setDatabaseHandle($db);
        $model->setValues($this->sanitised_input);
        if ($model->checkAccountExists()) {
            $changed_pwd = $model->getStoredPassword();
            $admin_status = $model->getAdminStatus();

            }
        }

}
