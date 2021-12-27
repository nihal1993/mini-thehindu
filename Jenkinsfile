pipeline {
  agent any
  stages {
    stage('scan') {
      steps {
        sh 'docker run -v $(pwd):/src --workdir /src codeclimate/codeclimate'
        
      }
      stage('code climate') {
      steps {
        sh 'codeclimate analyze'
        
      }
    }
  }
}
