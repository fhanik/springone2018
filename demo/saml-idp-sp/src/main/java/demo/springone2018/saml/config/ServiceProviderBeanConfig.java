package demo.springone2018.saml.config;

import org.springframework.context.annotation.Configuration;
import org.springframework.security.saml.provider.SamlServerConfiguration;
import org.springframework.security.saml.provider.service.config.SamlServiceProviderServerBeanConfiguration;

@Configuration
public class ServiceProviderBeanConfig extends SamlServiceProviderServerBeanConfiguration {

	private final AppConfig appConfig;

	public ServiceProviderBeanConfig(AppConfig appConfig) {
		this.appConfig = appConfig;
	}

	@Override
	protected SamlServerConfiguration getDefaultHostSamlServerConfiguration() {
		return  appConfig;
	}
}
