pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                checkout scm
                sh '''
                    docker build -t scn_jenkins_demo .
                '''
            }
        }
        stage('Test') {
            steps {
                sh '''
                    docker run scn_jenkins_demo /usr/bin/composer test src/tests
                '''
            }
        }
        stage('Run') {
            steps {
                sh '''
                    docker run --rm scn_jenkins_demo
                '''
            }
        }
    }
}
