package demo.springone2018.saml.config;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.saml.provider.SamlServerConfiguration;
import org.springframework.security.saml.provider.service.config.SamlServiceProviderServerBeanConfiguration;

@Configuration
public class BeanConfig extends SamlServiceProviderServerBeanConfiguration {

	@Autowired
	private AppConfig appConfig;

	@Override
	protected SamlServerConfiguration getDefaultHostSamlServerConfiguration() {
		return appConfig;
	}
}
