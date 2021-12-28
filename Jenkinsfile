pipeline {
  agent any
  stages {
    stage('scan') {
      steps {
        sh 'docker run -v $(pwd):/src --workdir /src codeclimate/codeclimate'
      }
    }
    stage('code climate') {
      steps {
        sh 'codeclimate analyze'
      }
    }
    stage('post email') {
      steps {
        emailext attachLog: true, body: '''$PROJECT_NAME - Build # $BUILD_NUMBER - $BUILD_STATUS: Check console output at $BUILD_URL to view the results.''', subject: '$PROJECT_NAME - Build # $BUILD_NUMBER - $BUILD_STATUS!', to: 'sukanya.brahmi@gmail.com'
      }
    }
  }
}
