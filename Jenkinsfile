pipeline {
  agent any
  stages {
    stage('scan') {
      steps {
        sh 'docker run -v $(pwd):/src --workdir /src returntocorp/semgrep-agent:v1 semgrep-agent --config auto --config p/phpcs-security-audit'
        
      }
    }
  }
}
